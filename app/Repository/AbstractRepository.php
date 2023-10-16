<?php

declare(strict_types=1);

namespace App\Repository;

use App\Interfaces\RepositoryInterface;
use Hyperf\DbConnection\Model\Model;
use Hyperf\Database\Model\Collection;
use Hyperf\Utils\ApplicationContext;


abstract class AbstractRepository implements RepositoryInterface
{
    protected static $model;

    public static function loadModel():Model{
        return ApplicationContext::getContainer()->get(static::$model);
    }

    public static function all():Collection{
        return self::loadModel()::all();
    }

    public static function find(int $id):Model|null{
        return self::loadModel()::query()->find($id);
    }

    public static function findUserId(int $id):Model|null{
        return self::loadModel()::query()->find($id);
    }

    public static function create(array $attributes = []):Model|null{
        return self::loadModel()::query()->create($attributes);
    }

    public static function delete(int $id):int{
        return self::loadModel()::query()->where(['id' => $id])->delete();
    }

    public static function update(int $id, array $attributes = []):int{
        return self::loadModel()::query()->where(['id' => $id])->update($attributes);
    }

}
