<?php
function save_question($id,$question,$point,$type, array $reponses, array $correct)
{
    $put=array(
            'id' => ++$id,
            'question' => $question,
            'point' => $point,
            'type' => $type,
            'reponses' => $reponses,
            'correct' => $correct,
            );
                array_to_json("questions",$put);
}
