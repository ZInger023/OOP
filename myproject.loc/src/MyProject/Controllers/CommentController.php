<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\Models\Users\User;
use MyProject\View\View;
use MyProject\Models\Comments\Comment;

class CommentController extends AbstractController
{
    /** @var View */
    protected $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }


    public function addComment(): void
    {
        if (!empty($_POST)) {
            var_dump($_POST);
            try {
                $comment = Comment:: add($_POST['comment'],$_POST['articleId'], 1);
            } catch (InvalidArgumentException $e) {

            }
        }
        echo "POST is empty";
    }
}