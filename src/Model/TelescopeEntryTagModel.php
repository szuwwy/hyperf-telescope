<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Wind\Telescope\Model;

use Hyperf\DbConnection\Model\Model;

class TelescopeEntryTagModel extends Model
{
    public const CREATED_AT = null;

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    public const UPDATED_AT = null;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected ?string $table = 'telescope_entries_tags';

    /**
     * connection name.
     * @var string
     */
    protected ?string $connection = 'telescope';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'entry_uuid',
        'tag',
    ];
}
