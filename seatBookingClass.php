<!-- AMIRUL 1914119 -->
<!-- class created for the reservation. After user filled in the input from the main page,
some of the values from the input will be used to create new object from this class -->

<?php
class SeatBooking
{
    private $seatRow;
    private $seatType;
    private $seatNum;
    private $description;
    private $price;
    
	//constructor
    public function __construct($seatRow, $seatType)
    {
        $this->seatRow=$seatRow;
        $this->seatType=$seatType;
    }

	//retrieving the seat row
    public function getSeatRow()
    {
        return $this->seatRow;
    }

	//retrieving the seat type
    public function getSeatType()
    {
        return $this->seatType;
    }

	//retrieving the seat num
    public function getSeatNum()
    {
        return $this->seatRow.$this->seatType;
    }
        
	//retrieving the seat description
    public function getDescription()
    {
        return $this->description;
    }
	
	//retrieving the seat price
    public function getPrice()
    {
        return $this->price;
    }

	//setter for seat seat description
    public function setDescription($seatType)
    {
        switch($this->seatType)
        {
            case "A":
                $this->description="Single seat";
                break;

            case "B":
                $this->description="Double aisle seat";
                break;

            case "C":
                $this->description="Double window seat";
                break;
        }
    }

	//setter for seat price
    public function setPrice($seatType)
    {
        if ($this->seatType == "A")
        {
            $this->price=30;
        }
        else if ($this->seatType == "B")
        {
            $this->price=20;
        }
		else if ($this->seatType == "C")
        {
            $this->price=20;
        }
    }
}

?>
