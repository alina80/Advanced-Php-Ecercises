<?php
//$folder = $_GET['date'];
//$limit = 120;
////extrag foldere si fisierele din el intr-un array
//$dir = scandir($folder);
////parcurg acel array
//foreach ($dir as $k => $v) {
//    //elimin folderele . si ..
//    if (realpath($v) == '') {
//        //compun numele fiecarui subdirector
//        $firstSubDir = $folder . "/" . $v;
//        //extrage in array fd si fis din subdir curent
//        $dir2 = scandir($firstSubDir);
//        //parcurg array-ul
//        foreach ($dir2 as $k1 => $v1) {
//            if (realpath($v1) == '') {
//                $secondSubDir = $firstSubDir . "/" . $v1;
//                $dir3 = scandir($secondSubDir);
//                //parcurg array-ul
//                foreach ($dir3 as $k2 => $v2) {
//                    if (realpath($v2) == '') {
//                        $file = $secondSubDir . "/" . $v2;
//                        if (time() - filemtime($file) > $limit) {
//                            unlink($file);
//                        }
//
//                    }
//                }
//            }
//        }
//    }
//}

// pct 3 recursive function

function goThroughDirs(string $dir, int $limit = 120) : void {

    $sub = scandir($dir);

    foreach ($sub as $k => $v) {
        if (realpath($v) == '') {
            if(is_dir($dir . "/" . $v)) {
                goThroughDirs($dir . "/" . $v, $limit);
            } elseif (is_file($dir . "/" . $v)){
                $file = $dir . "/" . $v;
                if (time() - filemtime($file) > $limit) {
                    echo 'Removed file: ' . $file . "<br/>";
                    unlink($file);
                }
            }
        }
    }
}

if(isset($_GET['delete'])){
    $folder = $_GET['date'];
    $limit = 120;
    goThroughDirs($folder,$limit);
}