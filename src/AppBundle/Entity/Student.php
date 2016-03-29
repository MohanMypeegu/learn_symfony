<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentRepository")
 */
class Student
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
     * @var integer
     *
     * @ORM\Column(name="schoolid", type="bigint", nullable=false)
     */
    private $schoolid;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="bigint", nullable=false)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_no", type="string", length=20, nullable=false)
     */
    private $regNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reg_date", type="date", nullable=false)
     */
    private $regDate;

    /**
     * @var string
     *
     * @ORM\Column(name="academic_year", type="string", length=20, nullable=false)
     */
    private $academicYear;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date", nullable=false)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="string", length=500, nullable=false)
     */
    private $remark;

    /**
     * @var boolean
     *
     * @ORM\Column(name="block_student", type="boolean", nullable=false)
     */
    private $blockStudent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=20, nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=20, nullable=false)
     */
    private $updatedBy;



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
     * Set schoolid
     *
     * @param integer $schoolid
     * @return Student
     */
    public function setSchoolid($schoolid)
    {
        $this->schoolid = $schoolid;

        return $this;
    }

    /**
     * Get schoolid
     *
     * @return integer 
     */
    public function getSchoolid()
    {
        return $this->schoolid;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return Student
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set regNo
     *
     * @param string $regNo
     * @return Student
     */
    public function setRegNo($regNo)
    {
        $this->regNo = $regNo;

        return $this;
    }

    /**
     * Get regNo
     *
     * @return string 
     */
    public function getRegNo()
    {
        return $this->regNo;
    }

    /**
     * Set regDate
     *
     * @param \DateTime $regDate
     * @return Student
     */
    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;

        return $this;
    }

    /**
     * Get regDate
     *
     * @return \DateTime 
     */
    public function getRegDate()
    {
        return $this->regDate;
    }

    /**
     * Set academicYear
     *
     * @param string $academicYear
     * @return Student
     */
    public function setAcademicYear($academicYear)
    {
        $this->academicYear = $academicYear;

        return $this;
    }

    /**
     * Get academicYear
     *
     * @return string 
     */
    public function getAcademicYear()
    {
        return $this->academicYear;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Student
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return Student
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Student
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Student
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set remark
     *
     * @param string $remark
     * @return Student
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string 
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set blockStudent
     *
     * @param boolean $blockStudent
     * @return Student
     */
    public function setBlockStudent($blockStudent)
    {
        $this->blockStudent = $blockStudent;

        return $this;
    }

    /**
     * Get blockStudent
     *
     * @return boolean 
     */
    public function getBlockStudent()
    {
        return $this->blockStudent;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Student
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
     * Set createdBy
     *
     * @param string $createdBy
     * @return Student
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Student
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

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     * @return Student
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
