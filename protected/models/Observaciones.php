<?php

/**
 * This is the model class for table "observaciones".
 *
 * The followings are the available columns in table 'observaciones':
 * @property integer $id
 * @property integer $cliente_id
 * @property string $name
 * @property string $description
 * @property string $rdate
 * @property string $udate
 * @property integer $status
 * @property integer $registros_id
 *
 * The followings are the available model relations:
 * @property Registros $registros
 */
class Observaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'observaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, cliente_id, registros_id', 'required'),
			array('id, cliente_id, status, registros_id', 'numerical', 'integerOnly'=>true),
			array('name, description', 'length', 'max'=>45),
			array('rdate, udate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cliente_id, name, description, rdate, udate, status, registros_id', 'safe', 'on'=>'search'),
			// Valores por defecto
            array(  'rdate','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'insert'),
            array(  'udate','default', 'value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert, update'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'registros' => array(self::BELONGS_TO, 'Registros', 'registros_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cliente_id' => 'Cliente',
			'name' => 'Nombre',
			'description' => 'Descripción',
			'rdate' => 'Fecha de Registro',
			'udate' => 'Fecha de Actualización',
			'status' => 'Estado',
			'registros_id' => 'Registros',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('rdate',$this->rdate,true);
		$criteria->compare('udate',$this->udate,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('registros_id',$this->registros_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Observaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
