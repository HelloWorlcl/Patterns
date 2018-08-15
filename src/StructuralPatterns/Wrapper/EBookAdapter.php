<?php

namespace StructuralPatterns\Wrapper;

class EBookAdapter implements IBook
{
    /**
     * @var IEBook
     */
    public $eBook;

    /**
     * EBookAdapter constructor.
     * @param IEBook $eBook
     */
    public function __construct(IEBook $eBook)
    {
        $this->eBook = $eBook;
    }

    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}