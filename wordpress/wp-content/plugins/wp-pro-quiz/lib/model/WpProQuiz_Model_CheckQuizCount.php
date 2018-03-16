<?php

class WpProQuiz_Model_CheckQuizCount extends WpProQuiz_Model_Model {

    protected $_userId;
    protected $_quizCount;

    public function setUserId($_userId) {
        $this->_userId = (int) $_userId;

        return $this;
    }

    public function getUserId() {
        return $this->_userId;
    }

    function getQuizCount() {
        return $this->_quizCount;
    }

    function setQuizCount($_quizCount) {
        $this->_quizCount = $_quizCount;
    }



}
