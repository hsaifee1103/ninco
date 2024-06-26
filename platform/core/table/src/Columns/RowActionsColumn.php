<?php

namespace Botble\Table\Columns;

use Botble\Table\Contracts\EditedColumn;

class RowActionsColumn extends Column implements EditedColumn
{
    /**
     * @var \Botble\Table\Abstracts\TableActionAbstract[] $actions
     */
    protected array $rowActions = [];

    public static function make(array|string $data = [], string $name = ''): static
    {
        return parent::make($data ?: 'row_actions', $name)
            ->title(trans('core/base::tables.operations'))
            ->alignCenter()
            ->orderable(false)
            ->searchable(false)
            ->exportable(false)
            ->printable(false)
            ->responsivePriority(99)
            ->columnVisibility();
    }

    public function setRowActions(array $actions): static
    {
        $this->rowActions = $actions;

        return $this;
    }

    public function getRowActions(): array
    {
        return $this->rowActions;
    }

    public function editedFormat($value): string
    {
        return view('core/table::row-actions', [
            'model' => $this->getModel(),
            'actions' => $this->getRowActions(),
        ])->render();
    }
}
