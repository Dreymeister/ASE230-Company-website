<?php

function getPages(){
    $pages=scandir('../../data/pages');

    array_splice($pages,0,2);

    return $pages;
}

function getPage($pageName){
    $pageContent=file_get_contents('../../data/pages/'.$pageName);

    return $pageContent;
}

function deletePage($pageName){
    unlink('../../data/pages/'.$pageName);
}

function updatePage($post){
    file_put_contents('../../data/pages/'.$post['pageName'],$post['pageContent']);
}

function createPage($post){
    if(!file_exists('../../data/pages/'.$post['pageName'].'.php')){
        file_put_contents('../../data/pages/'.$post['pageName'].'.php',$post['pageContent']);
    }else{
        display_error('This page already exists.');
    }
}

function tableRowPages($pages) {
    foreach($pages as $page){
        echo '<tr style="border: 1px solid black; border-collapse: collapse;">
            <td style="border: 1px solid black; border-collapse: collapse;">' . $page . '</td>
            <td style="border: 1px solid black; border-collapse: collapse;"><a href="detail.php?id=' . $page . '">Details</a></td>
            </tr>';
    }
}

?>
