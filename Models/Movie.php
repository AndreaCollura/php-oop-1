<?php



class Movies
{
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
    public $image;


    public function __construct($title, $original_title, $nationality, $date, $vote, $image)
    {

        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
        $this->image = $image;

        // $this->vote = $vote;

    }

}
