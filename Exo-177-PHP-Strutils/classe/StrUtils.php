<?php


class StrUtils
{
    private string $str;

    public function __construct(string $str)
    {
        $this->setstr($str);
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    public function bold ()
    {
        $this->setStr("<strong>" . $this->str . "</strong>");
    }

    public function italic ()
    {
        $this->setstr("<i>" . $this->str . "</i>");

    }

    public function underline ()
    {
        $this->setstr("<u>" . $this->str . "</u>");
    }

    public function capitalize ()
    {
        $this->setstr("<span style='text-transform: capitalize'>" . $this->str . "</span>");
    }

    public function __toString()
    {
        return $this->str;
        // TODO: Implement __toString() method.
    }


}

