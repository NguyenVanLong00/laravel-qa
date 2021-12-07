<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function getURLAttribute(){
        return route("question.show",$this->id);
    }

    public function getCreatedDateAttribute(){
        return $this->created_at->diffForHumans();
    }

    const ANSWERED = 'answered';
    const ANSWER_ACCEPTED = 'answer-accepted';
    const UNANSWERED = 'unanswered';

    public function getStatusAttribute(){
        if ($this->answers > 0){
            if (isset($this->best_answer_id)){
                return self::ANSWER_ACCEPTED;
            }
            return self::ANSWERED;
        }
        return self::UNANSWERED;
    }
}
