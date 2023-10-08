<?php
class li implements componente
{
    public function __construct(private string $texto =""){}

    public function criar()
    {
        echo "<li>{$this->texto}</li>";
    }
}
?>