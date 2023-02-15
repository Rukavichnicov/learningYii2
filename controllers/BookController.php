<?php

namespace app\controllers;

use app\models\Book;

class BookController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $books = Book::find()->all();
        $explain = \Yii::$app->db->createCommand("EXPLAIN SELECT * FROM book WHERE [[name]] = '123';")->queryOne();
//        \Yii::$app->db->createCommand('CREATE INDEX index_name ON book (name);')->queryOne();
//        \Yii::$app->db->createCommand('DROP INDEX index_name ON book;')->queryOne();
//        \Yii::$app->db->createCommand('CREATE FULLTEXT INDEX index_description ON book (description);')->queryOne();
//        \Yii::$app->db->createCommand('DROP INDEX index_description ON book;')->queryOne();
        $show = \Yii::$app->db->createCommand('SHOW INDEX FROM book;')->queryAll();
//        $array = ['book' => [1, 2, 3, 4]];
//        $json = json_encode($array);
//        $pathApp = \Yii::getAlias('@app');
//        $pathRuntime = \Yii::getAlias('@runtime');
//        $pathWebroot = \Yii::getAlias('@webroot');
//        file_put_contents($pathRuntime . '/file2.json', $json);
        return $this->render('index', ['books' => $books,]);
    }
}