<?php

namespace Entity;

class Annonce
{
    private $id_post;
    private $post_date;
    private $paragraphe_1;
    private $paragraphe_2;
    private $post_title;
    private $url_img_1;
    private $url_img_2;
    private $url_img_3;
    private $member_id_member;
    private $type_id_type;
    private $category_id_category; // 11

    public function getId_post() {
        return $this->id_post;
    }

    public function getPost_date() {
        return $this->post_date;
    }

    public function getParagraphe_1() {
        return $this->paragraphe_1;
    }

    public function getParagraphe_2() {
        return $this->paragraphe_2;
    }

    public function getPost_title() {
        return $this->post_title;
    }

    public function getUrl_img_1() {
        return $this->url_img_1;
    }

    public function getUrl_img_2() {
        return $this->url_img_2;
    }

    public function getUrl_img_3() {
        return $this->url_img_3;
    }

    public function getMember_id_member() {
        return $this->member_id_member;
    }

    public function getType_id_type() {
        return $this->type_id_type;
    }

    public function getCategory_id_category() {
        return $this->category_id_category;
    }

    public function setId_post($id_post) {
        $this->id_post = $id_post;
        return $this;
    }

    public function setPost_date($post_date) {
        $this->post_date = $post_date;
        return $this;
    }

    public function setParagraphe_1($paragraphe_1) {
        $this->paragraphe_1 = $paragraphe_1;
        return $this;
    }

    public function setParagraphe_2($paragraphe_2) {
        $this->paragraphe_2 = $paragraphe_2;
        return $this;
    }

    public function setPost_title($post_title) {
        $this->post_title = $post_title;
        return $this;
    }

    public function setUrl_img_1($url_img_1) {
        $this->url_img_1 = $url_img_1;
        return $this;
    }

    public function setUrl_img_2($url_img_2) {
        $this->url_img_2 = $url_img_2;
        return $this;
    }

    public function setUrl_img_3($url_img_3) {
        $this->url_img_3 = $url_img_3;
        return $this;
    }

    public function setMember_id_member($member_id_member) {
        $this->member_id_member = $member_id_member;
        return $this;
    }

    public function setType_id_type($type_id_type) {
        $this->type_id_type = $type_id_type;
        return $this;
    }

    public function setCategory_id_category($category_id_category) {
        $this->category_id_category = $category_id_category;
        return $this;
    }
}

//    public function getCategoryName()
//    {
//        if (!is_null($this->category)) {
//            return $this->category->getName();
//        }
//        
//        return '';
//    }
//    //    /**
//     * 
//     * @return int|null
//     */
//    public function getCategoryId()
//    {
//        if (!is_null($this->category)) {
//            return $this->category->getId();
//        }
//    }
//    //    public function getAuthor()
//    {
//        return $this->author;
//    }
//
//    public function setAuthor(User $author)
//    {
//        $this->author = $author;
//        return $this;
//    }
//
//    /**
//     * 
//     * @return int|null
//     */
//    public function getAuthorId()
//    {
//        if (!is_null($this->author)) {
//            return $this->author->getId();
//        }
//    }
//    
//    /**
//     * 
//     * @return string
//     */
//    public function getAuthorName()
//    {
//        if (!is_null($this->author)) {
//            return $this->author->getFullName();
//        }
//        
//        return '';
//    }

?>

