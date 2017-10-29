<?php

namespace App\Models\Entity;


use App\Models\Helper\Date;

class Post
{
    const POST_STATUS_PUBLISHED = 'published';
    const POST_STATUS_DRAFT = 'draft';
    const POST_STATUS_WAITING = 'waiting';
    const POST_STATUS_READY = 'ready';

    const UN_DELETED = false;
    const DELETED = true;

    const NO_PRIVATE = false;

    const COLUMNS = [
        'id' => 'setId',
        'author_id' => 'setAuthorId',
        'author' => 'setAuthor',
        'title' => 'setTitle',
        'url' => 'setUrl',
        'status' => 'setStatus',
        'content' => 'setContent',
        'header_image_url' => 'setHeaderImageUrl',
        'private' => 'setPrivate',
        'view_count' => 'setViewCount',
        'comment_count' => 'setCommentCount',
        'published_date' => 'setPublishedDate',
        'parent_id' => 'setParentId',
        'parents' => 'setParents',
        'description' => 'setDescription',
        'canonical' => 'setCanonical',
        'deleted' => 'setDeleted'
    ];

    protected $id;
    protected $authorId;
    protected $author;
    protected $title;
    protected $url;
    protected $status;
    protected $content;
    protected $headerImageUrl;
    protected $private;
    protected $viewCount;
    protected $commentCount;
    protected $publishedDate;
    protected $parentId;
    protected $parents;
    protected $metaDescription;
    protected $canonical;
    protected $deleted;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @return User
     */
    public function getAuthor()
    {
        return \App\Models\Map\User::map($this->author);
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getHeaderImageUrl()
    {
        return $this->headerImageUrl;
    }

    /**
     * @param mixed $headerImageUrl
     */
    public function setHeaderImageUrl($headerImageUrl)
    {
        $this->headerImageUrl = $headerImageUrl;
    }

    /**
     * @return mixed
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * @param mixed $private
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }

    /**
     * @return mixed
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }

    /**
     * @param mixed $viewCount
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }

    /**
     * @return mixed
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param mixed $commentCount
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }

    /**
     * @return Date
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * @param mixed $publishedDate
     */
    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate = $publishedDate;
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param mixed $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * @return mixed
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param mixed $parents
     */
    public function setParents($parents)
    {
        $this->parents = $parents;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCanonical()
    {
        return $this->canonical;
    }

    /**
     * @param mixed $canonical
     */
    public function setCanonical($canonical)
    {
        $this->canonical = $canonical;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param mixed $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
}