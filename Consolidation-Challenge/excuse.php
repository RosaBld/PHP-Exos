<html>
    <form method='post'>
        <div>
            <label for='childName'>Child name:</label>
            <input type='text' name='childName'>
        </div>
        <div>
            <label for='parent'>Parent name:</label>
            <input type='text' name='parent'>
        </div>
        <div>
            <label for='childGender'>Child Gender:</label>
            <input type='radio' id='boy' name='childGender' value='boy'/>
            <label for='boy'>Son</label>

            <input type='radio' id='girl' name='childGender' value='girl'/>
            <label for='girl'>Daughter</label>
        </div>
        <div>
            <label for='teacher'>Teacher name:</label>
            <input label='text' name='teacher'>
        </div>
        <div>
            <label for='excuse'>Excuse:</label>

            <input type='radio' id='illness' name='excuse' value='illness'/>
            <label for='illness'>Illness</label>

            <input type='radio' id='death' name='excuse' value='death'/>
            <label for='death'>Death of a family member (pet included)</label>

            <input type='radio' id='extractivity' name='excuse' value='extractivity'/>
            <label for='extractivity'>Extra-curricular activity</label>

            <input type='radio' id='other' name='excuse' value='other'/>
            <label for='other'>Other</label>
        </div>
        <input type='submit' name='submit' value='Apology Generator'>
    </form>
</html>

<?php
    if (isset($_POST['childName'], $_POST['childGender'], $_POST['teacher'], $_POST['excuse'], $_POST['parent'])) {
        $childName=$_POST['childName'];
        $childGender=($_POST['childGender']=='boy') ? 'son' : 'daughter';
        $teacher=$_POST['teacher'];
        $excuses=$_POST['excuse'];
        $illnesses=["$childName is sick", "$childName has a stomach bug", "$childName felt while playing", "$childName is hospitalized", "$childName has a fever"];
        $death=["$childName'pet died", "$childName's grandma died", "$childName's grandpa died", "$childName's uncle died", "$childName's aunt died"];
        $extractivity=["$childName has football", "$childName has piano lessons", "$childName has swimming practice", "$childName has aquaponey lessons", "$childName has viola lessons"];
        $other=["$childName doesn't want to see you", "$childName ran away", "$childName is menacing us", "$childName is too smart to come anyway", "$childName is dead to us"];
        $date=date('Y-m-d');
        $excuseGen;
        $parent=$_POST['parent'];

        function random() {
            return mt_rand(0,4);
        }
        $randNum=random();
        switch($excuses) {
            case "illness":
                $excuseGen=$illnesses[$randNum];
                break;
            case "death":
                $excuseGen=$death[$randNum];
                break;
            case "extractivity":
                $excuseGen=$extractivity[$randNum];
                break;
            case "other":
                $excuseGen=$other[$randNum];
                break;
        }
        echo "Dear $teacher, my $childGender, $childName, is unable to attend classe this $date because $excuseGen. Kind regards, $parent.";
    }
?>