<?php 

class ProductTable
{
    public $table = array();

    //Construct a table from the passed rows
    public function __construct($all_rows)
    {
        $row = array();
        foreach($all_rows as $row_number => $row_cells)
        {
            foreach($row_cells as $column_name => $cell_value)
            {
                $row[$column_name] = $cell_value;
            }
            $this->table[$row_number] = new ProductRow($row);
        }
    }

    //Display as an HTML table
    public function echo_html_table()
    {
        echo '<table>';
        $this->table[0]->echo_html_column_headers();
        for($i = 0; !empty($this->table[$i]); $i++)
        {
            $this->table[$i]->echo_html_row();
        }
        echo '</table>';
    }
}