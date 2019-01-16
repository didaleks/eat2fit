<?php namespace App\Traits;
use Illuminate\Database\Eloquent\SoftDeletes;

trait BaseMethods
{
    use SoftDeletes;

    public function parentsCount(){
        $count = 0;
        if (($parent = $this->parent()->get())){
            $count+=1;

        }
        while ($parent && ($parent->parent)) {
            $count+=1;
        }
        return $count;
    }

    public static function getUrl($id)
    {
        $model = self::firstOrNew(['id' => $id]);
        return $model->url ?: '#notFound';
    }

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function scopeSorted($query)
    {
        return $query->orderBy('sort');
    }

    public function scopeWithoutParents($query)
    {
        return $query->where('parent_id', null);
    }

    public function preview_image()
    {
        return $this->get_images_array()[0];
    }

    public static function getAllIds()
    {
        return self::all()->pluck('id');
    }
}