<?php
require_once('../database/Database.php');
require_once('../interface/iStock.php');
class Stock extends Database implements iStock {
    public function all_stockList()
    {
        $sql ="SELECT *
               FROM stock s
               INNER JOIN item i
               ON s.item_type_id - it.item_type_id
               WHERE s.stock_qty != ?
               ORDER BY s.stock_added ASC";
        return $this -> getRows($sql, [0]);
    }//end all_stocklist
    public function get_stockList($stock_id)
    {
        $sql ="SELECT *
               FROM stock s
               INNER JOIN item i
               ON s.item_type_id - it.item_type_id
               WHERE s.stock_qty != ?
               ORDER BY s.stock_added ASC";
        return $this -> getRows($sql, [$stock_id]);
    }// end get_stocklist
    public function del_stockList($stock_id)
    {
        $sql = "DELETE FROM stock
                WHERE stock_id = ?";
        return $this -> getRows($sql, [$stock_id]);
    }// end del_stocklist
    public function add_stock($item_id, $qty, $xDate, $manu, $purc)
    {
        $sql = "INSERT INTO stock(item_id, stock_qty, stock_expiry, stock_manufactured, stock_purchased)
        VALUES (?,?,?,?,?)";
        //return true;
        return $this ->insertRow($sql,[$item_id,$qty, $xDate,$manu, $purc]);
    }//end add stock
    public function all_stockGroup()
    {
        $sql = "SELECT s.stock_id, i.item_name, i.item_price, SUM(stock_qty) as qty
                FROM stock s
                INNER JOIN item i
                ON s.item_id = i.item_id
                GROUP BY s.item_id
                ORDER BY i.item_name ASC";
                return $this->getRows($sql);
    }//end all stockgroup
    public function update_stockQty($stock_id, $stock_qty)
    {
        $sql = "UPDATE stock
                SET stock_qty = ?
                WHERE stock_id = ?";
        return $this-> updateRow($sql,[$stock_qty, $stock_id]);
    }//end update_stockqty
    public function get_stockQty($stock_id)
    {
       $sql= "SELECT*
              FROM stock = ?
              WHERE stock_id = ?";
        return $this-> getRow($sql,[$stock_id]);
    }//end get_stockqty
    public function add_fuck($item_id, $qty, $xDate, $manu, $purc)
    {
        $sql = "INSERT INTO stock(item_id, stock_qty, stock_expiry, stock_manufactured, stock_purchased)
        VALUES (?,?,?,?,?)";
        return $this ->insertRow($sql,[$item_id,$qty, $xDate,$manu, $purc]);
    }//end add_stock
}// end class stock
$stock =new Stock();

// End of file stock.php
//Location: .//C/xampp/htdocs/pharm/class/stock.php