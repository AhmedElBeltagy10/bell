<?php
include_once "Database.php";
include_once "Operations.php";
class Users extends Database implements Operations{

    var $user;
    var	$Fname,$Lname,$Phone,$Email,$Address1,$Address2,$City,$Country,$PostCode,$Notes;

    public function getFname()
    {
        return $this->Fname;
    }
    public function setFname($Fname)
    {
        $this->Fname=$Fname;
    }

    public function getLname()
    {
        return $this->Lname;
    }
    public function setLname($Lname)
    {
        $this->Lname=$Lname;
    }
    public function getPhone()
    {
        return $this->Phone;
    }
    public function setPhone($Phone)
    {
        $this->Phone=$Phone;
    }
    public function getEmail()
    {
        return $this->Email;
    }
    public function setEmail($Email)
    {
        $this->Email=$Email;
    }
    public function getAddress1()
    {
        return $this->Address1;
    }
    public function setAddress1($Address1)
    {
        $this->Address1=$Address1;
    }
    public function getAddress2()
    {
        return $this->Address2;
    }
    public function setAddress2($Address2)
    {
        $this->Address2=$Address2;
    }
    public function getCity()
    {
        return $this->City;
    }
    public function setCity($City)
    {
        $this->City=$City;
    }
    public function getCountry()
    {
        return $this->Country;
    }
    public function setCountry($Country)
    {
        $this->Country=$Country;
    }
    public function getPostCode()
    {
        return $this->PostCode;
    }
    public function setPostCode($PostCode)
    {
        $this->PostCode=$PostCode;
    }
    public function getNotes()
    {
        return $this->Notes;
    }
    public function setNotes($Notes)
    {
        $this->Notes=$Notes;
    }
   
   

  public function Add()
{
        return parent::RUNDML("insert into addressbook (FristName,LastName,Phone,Email,Address1,Address2,City,Country,PostCode,Notes) values ('".$this->getFname()."','".$this->getLname()."','".$this->getPhone()."','".$this->getEmail()."','".$this->getAddress1()."','".$this->getAddress2()."','".$this->getCity()."','".$this->getCountry()."','".$this->getPostCode()."','".$this->getNotes()."')");
       
}
  public function Update()
  {
      return parent::RUNDML("update addressbook set FristName='".$this->getFname()."',LastName='".$this->getLName()."',Phone='".$this->getPhone()."',Email='".$this->getEmail()."'
      ,Address1='".$this->getAddress1()."',Address2='".$this->getAddress2()."',City='".$this->getCity()."',Country='".$this->getCountry()."',PostCode='".$this->getPostCode()."',Notes='".$this->getNotes()."'");
    
  }
  
 
  public function Delete(){
    
  }
  public function Deleteid($i){
    return parent::RUNDML("delete from addressbook  where userID='".$i."'");
  }
  public function Search()
  {

  }
  public function GettAll(){
       
    $useraddress=parent::RUNSearch("Select * From addressbook order by userID desc");
    return $useraddress;
    }
    public function showUser($id){
   $res= parent::RUNSearch("Select * From addressbook where  userID='".$id."' ");
    return $res;
  }
}
?>