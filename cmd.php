<?php

define("PROCESS_PATH", "/usr/local/bin/");
define("PROCESS_NAME1", "fddctl");
define("PROCESS_NAME2", "fddemu");
define("PROCESS_NAME3", "fdxconv");

$fddType = array("XDF", "HDM", "2HD", "DUP", "IMG", "DIM", "D68", "D88", "D77");

if(isset($_GET['cmd'])){
	switch ($_GET['cmd']) {
	case 'fddemu':
		$output = array();
		$ret = null;
		exec("sudo ".PROCESS_PATH.PROCESS_NAME2." 2>/dev/null > /dev/null &");
		sleep(1);
		break;
	case 'list':
		$output = array();
		$ret = null;
		exec(PROCESS_PATH.PROCESS_NAME1." -l",$output,$ret);
		echo json_encode($output);
		break;
	case 'insert':
		// ファイルinsert
		$command = PROCESS_PATH.PROCESS_NAME1.' -i '.$_GET['drive'].' -c insert '.$_GET['file'];
		$output = array();
		$ret = null;
		exec($command, $output, $ret);
		break;
	case 'eject':
		// ファイルeject
		$command = PROCESS_PATH.PROCESS_NAME1.' -i '.$_GET['drive'].' -c eject';
		$output = array();
		$ret = null;
		exec($command, $output, $ret);
		break;
	case 'dir':
		$path = $_GET['path'];
		$fdx_file = array();
		$other_file = array();

		if($dir = opendir($path)) {
			while(($file = readdir($dir)) !== false) {
				$file_path = $path.$file;
				if(is_file($file_path)) {
					// file一覧(とりあえずサブディレクトリは無視)
					$path_data = pathinfo($file);
					$ext = strtoupper($path_data['extension']);		//拡張子を取得して大文字に変換
					if($ext === 'FDX') {
						$fdx_file[] = $file;
					} else if(in_array($ext, $fddType)) {
						$other_file[] = $file;
					}
				}
			}
		}
		closedir($dir);

//		natcasesort($fdx_file);				
		echo json_encode($fdx_file);
		break;
	default:
		break;
		// cmd error
	}
}

?>
