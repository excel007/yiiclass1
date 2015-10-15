<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Testui2Form extends Model
{
    public $brandname;
    public $seriesname;
	public $cc;
    public $year;
    public $color;
    public $province;
    public $price;	
    public $note;    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['brandname', 'seriesname', 'price'], 'required'],
            [['brandname','seriesname','color','note','province'],'string'],
            // email has to be a valid email address
            [['cc','price','year'], 'integer'],
            ['cc', 'integer','min'=>1000,'max'=>9999],
			['year', 'integer','min'=>1990,'max'=>2015],
			['price', 'integer','min'=>100000,'max'=>99999999],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'brandname' => 'ยี่ห้อ',
            'seriesname' => 'รุ่น',
            'price' => 'ราคา',
            'year'=>'ปีที่วางจำหน่าย',
            'cc'=>'ขนาดเครื่องยนต์(CC)',
			'note'=>'รายละเอียดอื่น',
			'color'=>'สี',
			'province'=>'จังหวัด',
        ];
    }
}
