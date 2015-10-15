<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class TestuiForm extends Model
{
    public $fname;
    public $lname;
    public $nickname;
    public $email;
    public $license;
    public $province;
    public $age;
    public $salary;
    public $note;
    public $items;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['fname', 'email', 'lname'], 'required'],
            [['note','province','nickname'],'string'],
            // email has to be a valid email address
            ['email', 'email'],
            ['age', 'number'],
            ['salary', 'integer'],
            ['age', 'integer','min'=>1,'max'=>99],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fname' => 'First name',
            'lname' => 'Last name',
            'nickname' => 'Nickname',
            'license'=>'license plate',
            'items'=>'Favoured subject',            
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
}
