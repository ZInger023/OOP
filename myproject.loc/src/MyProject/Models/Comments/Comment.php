<?php

namespace MyProject\Models\Comments;

use MyProject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;

class Comment extends ActiveRecordEntity
{

    /** @var string */
    protected $text;

    /** @var int */
    protected $id;

    /** @var int */
    protected $authorId;

    /** @var int */
    protected $articleId;

    /** @var string */
    protected $createdAt;



    public static function add(string $newText,string $articleId,int $author)
    {
        $comment = new Comment();
        $comment->text = $newText;
        $comment->articleId = $articleId;
        //this->articleId = $article->getId();
        var_dump($comment);
        return $comment;
    }

}