<?php

require_once 'includes.inc';

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Leaver Form</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css" type="text/css"/>
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
</head>

<header>
    <h3>Leaver Form - IT department</h3>
</header>


<section>
    <form class="pure-form pure-form-aligned" action="process.php" method="post" id="leaver_form">

        <fieldset>
            <legend>Personal information</legend>

            <label for="title"></label>
            <select name="title" id="title" required>
                <option value="" selected="selected">Title</option>
                <?php
                foreach($titles as $value){
                    echo "
                    <option value=\"$value\"> $value </option>";
                }
                ?>
            </select>

            <label for="name"></label>
            <input type="text" id="name" name="name"  placeholder="Name" required/>

            <label for="surname"></label>
            <input type="text" id="surname" name="surname"  placeholder="Surname" required/>
        </fieldset>

        <fieldset>
            <legend>Job information</legend>

            <div class="pure-control-group">
                <label for="job_title">Job Title</label>
                <input type="text" id="job_title" name="job_title" placeholder="Job Title" required/>
            </div>
            <div class="pure-control-group">
                <label for="department">Department</label>
                <select id="department" name="department" required>
                    <option value="" selected="selected">Select a Department</option>
                    <?php
                    foreach($departments as $value){
                        echo "
                        <option value=\"$value\"> $value </option>";
                    }
                    ?>

                </select>
            </div>
            <div class="pure-control-group">
                <label for="manager">Manager</label>
                <input type="text" id="manager" name="manager" placeholder="Manager Name">
            </div>

            <div class="pure-control-group">
                <label for="employment_type">Employment type</label>
                <select id="employment_type" name="employment_type" required>
                    <option value="" selected="selected">Choose employment type</option>
                    <?php
                    foreach($employment_type as $value){
                        echo "
                        <option value=\"$value\"> $value </option>";
                    }
                    ?>
                </select>
            </div>

            <div class="pure-control-group">
                <label for="end_date">Last work date</label>
                <input type="date" id="end_date" name="end_date" title="If contracting"/>
            </div>
        </fieldset>

        <fieldset>
            <legend>Application Access Restriction</legend>

            <?php
            foreach($applications as $key => $value){
                echo
                "
                <div class=\"pure-control-group\">
                <label for=\"$key\">$value</label>
                <input type=\"checkbox\" name=\"$key\" id=\"$key\"/>
                </div>";
            }
            ?>
            <div class="pure-control-group">
                <label for="email_forwarding">Email Forwarding </label>
                <textarea rows="1" cols="50" name="email_forwarding" id="email_forwarding"  placeholder="Who would you like to forward emails to" ></textarea>
            </div>
            <div class="pure-control-group">
                <label for="other_application_access">Any other third-party systems:</label>
                <textarea name="other_application_access" id="other_application_access" rows="1" cols="50" ></textarea>
            </div>
        </fieldset>

        <fieldset>
            <legend>Hardware Returned</legend>

            <?php
            foreach($hardware as $key => $value){
                echo
                "
                <div class=\"pure-control-group\">
                <label for=\"$key\">$value</label>
                <input type=\"radio\" value=\"$key\" name=\"computer_type\" id=\"$key\"/>
                </div>";
            }
            ?>
            <div class="pure-control-group">
                <label for="ipnone">iPhone</label>
                <input type="checkbox" name="ipnone" id="ipnone"/>
            </div>
        </fieldset>

        <fieldset>
            <legend>Notes</legend>
            <div class="pure-control-group">
                <label for="notes">Notes</label>
                <textarea rows="5" cols="50" name="notes" id="notes"></textarea>
            </div>

        </fieldset>

        <button class="pure-button pure-button-primary" type="submit" name="submit" form="leaver_form">Submit</button>
        <input type="hidden" name="form-type" value="leaver"/>

    </form>
</section>

<footer>

</footer>

<body>

</body>
</html>