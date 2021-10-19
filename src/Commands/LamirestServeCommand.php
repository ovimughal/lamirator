<?php

/**
 * This file is part of Lamirest.
 *
 * (c) OwaisMughal <ovi.mughal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This is a simple Command file containing methods to serve oapiconfg module automatically
 * without any manual configuration
 */

namespace Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LamirestServeCommand extends Command {

    protected $modulePrefix = 'Oapi';

    /**
     * Configure 
     * 
     * In this method setup command, description and its parameters.
     * 
     * @author OwaisMughal <ovi.mughal@gmail.com>
     *
     * @access protected
     */
    protected function configure() {
        $this->setName('lamirest:serve');
        $this->setDescription('Serves Lamirest Module automatically.It is a one time thing.');

        $this->setHelp(<<<EOT
Serves Lamirest Module
EOT
        );
    }

    /**
     * Execute 
     * 
     * This method is the start & end point of all the execution.
     * 
     * @author OwaisMughal <ovi.mughal@gmail.com>
     * 
     * @param  InputInterface $input
     * @param  OutputInterface $output
     * 
     * @return numeric value
     * @access protected
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        $moduleName = 'Lamirest';
        $path = shell_exec("pwd | tr -d '\n'");

        $moduleConfigFile = $path . '/config/modules.config.php';

        list($err, $msg) = $this->loadModule($moduleConfigFile, $moduleName);

        if (!$err) {
            list($err, $msg) = $this->serve($path, $msg);
        }

        $this->displayResponse($output, $err, $msg);
        // return value is important when using CI
        // to fail the build when the command fails
        // 0 = success, other values = fail
        return 0;
    }

    /**
     * Serve
     * 
     * This method is used to execute shell commands to serve Lamirest
     * 
     * @author OwaisMughal <ovi.mughal@gmail.com>
     * 
     * @param  string $path Will receive the project root path	
     * @param  string $moduleName Will receive module name
     * @param  string $msg Will receive existing error or success message
     *
     * @return array
     * @access protected
     */
    protected function serve($path, $msg) {
        $err = false;

        if (is_dir($path . '/config/autoload')) {
            shell_exec(
                    'cd vendor/ovimughal/lamirator/dist;'
                    . 'cp -R * ' . $path . '/config/autoload;'
            );
        } else {
            $err = true;
            $msg = '\'' . $path . '/config/autoload' . '\' does not exist';
        }

        return [$err, $msg];
    }

    /**
     * Load Module
     * 
     * This method is used to load module into config/modules.config.php file
     * 
     * @author OwaisMughal <ovi.mughal@gmail.com>
     * 
     * @param  string $moduleConfigFile Will receive the modules.config.php file path
     * @param  string $modName Will receive module name
     *
     * @access protected
     */
    protected function loadModule($moduleConfigFile, $modName) {
        $err = false;
        $moduleName = ucfirst(strtolower($modName));

        $loadedModules = require $moduleConfigFile;
        if (!in_array($moduleName, $loadedModules)) {
            $loadedModules[] = $moduleName;

            $moduleStr = implode(",", $loadedModules);
            $formatedModulesStr = "'" . str_replace(",", "',\n'", $moduleStr) . "'";

            file_put_contents($moduleConfigFile, "<?php \n return[ \n" . $formatedModulesStr . "\n];");
            $msg = '\'' . $moduleName . '\' successfully served.';
        } else {
            $err = true;
            $msg = '\'' . $moduleName . '\' already served.';
        }
        return [$err, $msg];
    }

    /**
     * Display response
     * 
     * This method is used display response on console
     * 
     * @author OwaisMughal <ovi.mughal@gmail.com>
     * 
     * @param  OutputInterface $output
     * @param  boolean $err
     * @param  string $msg Will receive error or success message
     *
     * @access protected
     */
    protected function displayResponse(OutputInterface $output, $err, $msg) {
        $color = 'green';
        if ($err) {
            $color = 'red';
        }
        $header_style = new OutputFormatterStyle('white', $color, array('bold'));
        $output->getFormatter()->setStyle('header', $header_style);

        $output->writeln(sprintf(
                        '<header>' . $msg . '</header>'
        ));
    }

}
