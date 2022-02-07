<?php
interface iExpired{
    public function and_expired($name, $price, $qty, $expiredDate);
    public function all_expired();
}//end