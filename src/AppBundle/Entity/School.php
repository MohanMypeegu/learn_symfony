<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * School
 *
 * @ORM\Table(name="school")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SchoolRepository")
 */
class School
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="schoolname", type="string", length=255, nullable=false)
     */
    private $schoolname;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=500, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="sendmail_from", type="string", length=255, nullable=false)
     */
    private $sendmailFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_pname", type="string", length=255, nullable=false)
     */
    private $contactPname;

    /**
     * @var string
     *
     * @ORM\Column(name="principal_name", type="string", length=255, nullable=false)
     */
    private $principalName;

    /**
     * @var string
     *
     * @ORM\Column(name="principal_no", type="string", length=50, nullable=false)
     */
    private $principalNo;

    /**
     * @var string
     *
     * @ORM\Column(name="office_no", type="string", length=50, nullable=false)
     */
    private $officeNo;

    /**
     * @var string
     *
     * @ORM\Column(name="school_address", type="text", length=65535, nullable=false)
     */
    private $schoolAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=100, nullable=false)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="psychologist_day", type="string", length=20, nullable=false)
     */
    private $psychologistDay;

    /**
     * @var string
     *
     * @ORM\Column(name="comprehensive_report_img", type="string", length=1000, nullable=false)
     */
    private $comprehensiveReportImg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    private $updated;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set schoolname
     *
     * @param string $schoolname
     * @return School
     */
    public function setSchoolname($schoolname)
    {
        $this->schoolname = $schoolname;

        return $this;
    }

    /**
     * Get schoolname
     *
     * @return string 
     */
    public function getSchoolname()
    {
        return $this->schoolname;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return School
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return School
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set sendmailFrom
     *
     * @param string $sendmailFrom
     * @return School
     */
    public function setSendmailFrom($sendmailFrom)
    {
        $this->sendmailFrom = $sendmailFrom;

        return $this;
    }

    /**
     * Get sendmailFrom
     *
     * @return string 
     */
    public function getSendmailFrom()
    {
        return $this->sendmailFrom;
    }

    /**
     * Set contactPname
     *
     * @param string $contactPname
     * @return School
     */
    public function setContactPname($contactPname)
    {
        $this->contactPname = $contactPname;

        return $this;
    }

    /**
     * Get contactPname
     *
     * @return string 
     */
    public function getContactPname()
    {
        return $this->contactPname;
    }

    /**
     * Set principalName
     *
     * @param string $principalName
     * @return School
     */
    public function setPrincipalName($principalName)
    {
        $this->principalName = $principalName;

        return $this;
    }

    /**
     * Get principalName
     *
     * @return string 
     */
    public function getPrincipalName()
    {
        return $this->principalName;
    }

    /**
     * Set principalNo
     *
     * @param string $principalNo
     * @return School
     */
    public function setPrincipalNo($principalNo)
    {
        $this->principalNo = $principalNo;

        return $this;
    }

    /**
     * Get principalNo
     *
     * @return string 
     */
    public function getPrincipalNo()
    {
        return $this->principalNo;
    }

    /**
     * Set officeNo
     *
     * @param string $officeNo
     * @return School
     */
    public function setOfficeNo($officeNo)
    {
        $this->officeNo = $officeNo;

        return $this;
    }

    /**
     * Get officeNo
     *
     * @return string 
     */
    public function getOfficeNo()
    {
        return $this->officeNo;
    }

    /**
     * Set schoolAddress
     *
     * @param string $schoolAddress
     * @return School
     */
    public function setSchoolAddress($schoolAddress)
    {
        $this->schoolAddress = $schoolAddress;

        return $this;
    }

    /**
     * Get schoolAddress
     *
     * @return string 
     */
    public function getSchoolAddress()
    {
        return $this->schoolAddress;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return School
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set psychologistDay
     *
     * @param string $psychologistDay
     * @return School
     */
    public function setPsychologistDay($psychologistDay)
    {
        $this->psychologistDay = $psychologistDay;

        return $this;
    }

    /**
     * Get psychologistDay
     *
     * @return string 
     */
    public function getPsychologistDay()
    {
        return $this->psychologistDay;
    }

    /**
     * Set comprehensiveReportImg
     *
     * @param string $comprehensiveReportImg
     * @return School
     */
    public function setComprehensiveReportImg($comprehensiveReportImg)
    {
        $this->comprehensiveReportImg = $comprehensiveReportImg;

        return $this;
    }

    /**
     * Get comprehensiveReportImg
     *
     * @return string 
     */
    public function getComprehensiveReportImg()
    {
        return $this->comprehensiveReportImg;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return School
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return School
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
