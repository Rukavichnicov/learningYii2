<?php
/** @var yii\web\View $this */
/** @var array $books */
/** @var \app\models\Book $book */
/** @var \app\models\Author $author */

$this->title = 'Книги';
?>
<div class="body-content">
    <h1>Книги</h1>
    <table class="table">
        <thead class="table">
        <th>Наименование книги</th>
        <th>Авторы</th>
        <th>Описание</th>
        </thead>
        <tbody class="table">
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= $book->name ?></td>
            <td>
                <?=
                $fullNameAuthors = '';
                foreach ($book->authors as $author) {
                    $fullNameAuthors .= $author->full_name . ', ';
                }
                $fullNameAuthors = trim($fullNameAuthors, ', ');
                echo $fullNameAuthors;
                ?>
            </td>
            <td><?= $book->description ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
