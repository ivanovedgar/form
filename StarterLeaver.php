<?php

class StarterLeaver {
    private $title, $name, $surname, $job_title, $department, $manager, $employment_type, $start_date,
$end_date, $admin, $jira, $cs, $selligent, $blog, $analytics, $github, $email, $email_groups, $other_application_access,
$computer_type, $ipnone, $msoffice, $photoshop, $other_software, $notes, $form_name;

    /**
     * @return mixed
     */
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * @param mixed $job_title
     */
    public function setJobTitle($job_title)
    {
        $this->job_title = $job_title;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param mixed $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    }

    /**
     * @return mixed
     */
    public function getEmploymentType()
    {
        return $this->employment_type;
    }

    /**
     * @param mixed $employment_type
     */
    public function setEmploymentType($employment_type)
    {
        $this->employment_type = $employment_type;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param mixed $start_date
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param mixed $end_date
     */
    public function setEndDate($end_date)
    {
        $this->end_date = $end_date;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return mixed
     */
    public function getJira()
    {
        return $this->jira;
    }

    /**
     * @param mixed $jira
     */
    public function setJira($jira)
    {
        $this->jira = $jira;
    }

    /**
     * @return mixed
     */
    public function getCs()
    {
        return $this->cs;
    }

    /**
     * @param mixed $cs
     */
    public function setCs($cs)
    {
        $this->cs = $cs;
    }

    /**
     * @return mixed
     */
    public function getSelligent()
    {
        return $this->selligent;
    }

    /**
     * @param mixed $selligent
     */
    public function setSelligent($selligent)
    {
        $this->selligent = $selligent;
    }

    /**
     * @return mixed
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * @param mixed $blog
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;
    }

    /**
     * @return mixed
     */
    public function getAnalytics()
    {
        return $this->analytics;
    }

    /**
     * @param mixed $analytics
     */
    public function setAnalytics($analytics)
    {
        $this->analytics = $analytics;
    }

    /**
     * @return mixed
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * @param mixed $github
     */
    public function setGithub($github)
    {
        $this->github = $github;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmailGroups()
    {
        return $this->email_groups;
    }

    /**
     * @param mixed $email_groups
     */
    public function setEmailGroups($email_groups)
    {
        $this->email_groups = $email_groups;
    }

    /**
     * @return mixed
     */
    public function getOtherApplicationAccess()
    {
        return $this->other_application_access;
    }

    /**
     * @param mixed $other_application_access
     */
    public function setOtherApplicationAccess($other_application_access)
    {
        $this->other_application_access = $other_application_access;
    }

    /**
     * @return mixed
     */
    public function getComputerType()
    {
        return $this->computer_type;
    }

    /**
     * @param mixed $computer_type
     */
    public function setComputerType($computer_type)
    {
        $this->computer_type = $computer_type;
    }

    /**
     * @return mixed
     */
    public function getIpnone()
    {
        return $this->ipnone;
    }

    /**
     * @param mixed $ipnone
     */
    public function setIpnone($ipnone)
    {
        $this->ipnone = $ipnone;
    }

    /**
     * @return mixed
     */
    public function getMsoffice()
    {
        return $this->msoffice;
    }

    /**
     * @param mixed $msoffice
     */
    public function setMsoffice($msoffice)
    {
        $this->msoffice = $msoffice;
    }

    /**
     * @return mixed
     */
    public function getPhotoshop()
    {
        return $this->photoshop;
    }

    /**
     * @param mixed $photoshop
     */
    public function setPhotoshop($photoshop)
    {
        $this->photoshop = $photoshop;
    }

    /**
     * @return mixed
     */
    public function getOtherSoftware()
    {
        return $this->other_software;
    }

    /**
     * @param mixed $other_software
     */
    public function setOtherSoftware($other_software)
    {
        $this->other_software = $other_software;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getFormName()
    {
        return $this->form_name;
    }

    /**
     * @param mixed $form_name
     */
    public function setFormName($form_name)
    {
        $this->form_name = $form_name;
    }

}