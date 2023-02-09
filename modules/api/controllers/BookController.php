<?php

namespace app\modules\api\controllers;

use app\modules\api\models\Book;
use yii\rest\Controller;

class BookController extends Controller
{
    public function actionIndex()
    {
        $books = Book::find()->all();
        $authors = [];
        foreach ($books as $book) {
            $authors[$book->id] = $book->authors;
        }
        return ['books' => $books, 'authors' => $authors];
    }

    public function actionView($id)
    {
        $book = Book::find()->where(['id' => $id])->one();
        return $book;
    }
}