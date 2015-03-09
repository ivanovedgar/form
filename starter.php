<?php

require_once 'includes.inc';

?>

<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Starter Form</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css" type="text/css"/>
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
</head>

<body>

<header>
    <h3>New Starter Form - IT department</h3>
</header>

<section>
    <form class="pure-form pure-form-aligned" action="process.php" method="post" id="starter_form">

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
                <label for="start_date">Start Date</label>
                <input type="date" id="start_date" name="start_date" required/>
            </div>
            <div class="pure-control-group">
                <label for="end_date">End Date</label>
                <input type="date" id="end_date" name="end_date" title="If contracting"/>
            </div>
        </fieldset>

        <fieldset>
            <legend>Application Access</legend>
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
                <label for="email_groups">Email groups</label>
                <textarea rows="1" cols="50" name="email_groups" id="email_groups" placeholder=" e.g. creative; editorial"></textarea>
            </div>
            <div class="pure-control-group">
                <label for="other_application_access">Any other third-party systems:</label>
                <textarea rows="1" cols="50" name="other_application_access" id="other_application_access"  ></textarea>
            </div>
        </fieldset>

        <fieldset>
            <legend>Hardware</legend>

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
                <label for="ipnone">iPhone(Buyers and SMT only)</label>
                <input type="checkbox" name="ipnone" id="ipnone"/>
            </div>
        </fieldset>

        <fieldset>
            <legend>Software</legend>

            <?php
            foreach($software as $key => $value){
                echo
                "
                <div class=\"pure-control-group\">
                <label for=\"$key\">$value</label>
                <input type=\"checkbox\" name=\"$key\" id=\"$key\"/>
                </div>";
            }
            ?>

            <div class="pure-control-group">
                <label for="other_software">Other</label>
                <textarea rows="1" cols="50" name="other_software" id="other_software"></textarea>
            </div>
        </fieldset>

        <fieldset>
            <legend>Notes</legend>
            <div class="pure-control-group">
                <label for="notes">Notes</label>
                <textarea rows="5" cols="50" name="notes" id="notes"></textarea>
            </div>

        </fieldset>

        <button class="pure-button pure-button-primary" type="submit" name="submit" form="starter_form">Submit</button>
        <input type="hidden" name="form-type" value="starter"/>

    </form>
</section>

<footer>

</footer>

</body>
</html>