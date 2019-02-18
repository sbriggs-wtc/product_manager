<?php

class ProductRow
{
    public $row = array();
    
    public function __construct($row)
    {
        foreach($row as $column_name => $cell_value)
        {
            $this->row[$column_name] = $cell_value;
        }
    }

    //Display HTML column headers rows
    public function echo_html_column_headers()
    {
        echo '<tr>';
        foreach($this->row as $column_name => $cell_value)
        {
            echo '<th>'.ucwords($column_name).'</th>';
        }
        echo '<th colspan="2">Actions</th></tr>';
    }

    //Display as HTML rows
    public function echo_html_row()
    {
        echo '<tr>';
        foreach($this->row as $column_name => $cell_value)
        {
            echo '<td>' . $cell_value . '</td>';
        }
        echo '<td><button onclick="edit('.$this->row['product_id'].')">Edit</button></td>';
        echo '<td><button onclick="remove('.$this->row['product_id'].')">Remove</button></td>';
        echo '</tr>';
    }
}