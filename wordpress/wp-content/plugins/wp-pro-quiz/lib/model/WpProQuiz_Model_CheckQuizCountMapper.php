<?php

class WpProQuiz_Model_CheckQuizCountMapper extends WpProQuiz_Model_Mapper {

    public function decreaseCount($id) {
        return $this->_wpdb->query($this->_wpdb->prepare(
                                "UPDATE
					{$this->_tableCheckCount}
				SET 
					`quiz_count` = (`quiz_count`-1)
				WHERE quiz_count>=0 AND user_id = %d", $id));
    }

    public function fetch($id) {
        $row = $this->_wpdb->get_row(
                $this->_wpdb->prepare(
                        "SELECT
					*
				FROM
					" . $this->_tableCheckCount . "
				WHERE
					user_id = %d", $id), ARRAY_A
        );
        $model = new WpProQuiz_Model_CheckQuizCount($row);
        return $model;
    }

}
