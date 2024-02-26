<?php
class Pagination
{
    protected int $totalRecord;
    protected int $recordPerPage;
    protected int $totalPage;
    protected int $currentPage;
    protected int $offset;

    public function __construct(
        int $totalRecord,
        int $recordPerPage,
        int $currentPage
    ) {
        $this->totalRecord = $totalRecord;
        $this->recordPerPage = $recordPerPage;
        $this->totalPage = ceil($totalRecord / $recordPerPage);

        $currentPage = max($currentPage, 1);
        $currentPage = min($currentPage, $this->totalPage);
        $this->currentPage = $currentPage;

        $this->offset = ($this->currentPage * $recordPerPage) - $recordPerPage;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getPages(): array
    {
        return range(1, $this->totalPage);
    }
}
