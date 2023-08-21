<?php

// =============================================
// Autor                Alexander Eliseo Olivieri
// Creado               lunes, 21 de agosto de 2023 14:22:54
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.6
// =============================================

namespace App;

/**
 * Recuperar Productor - Recuperar Productor.
 */
class tb3d113fe1c4664c5faf23248cb00d410f extends \Eloquent
{
    protected $appends = ['flabdb1c514f0a4eb6b70d99121d663877', 'fl0b24c905b9e648d8a5074c6e8579b58f', 'fld030b7872cbd48e8a60b59f448cd61ff'];
    protected $hidden = ['C1', 'C2', 'C3'];

    /* FK_CATEGORIA - FK_CATEGORIA */
    public function getFlabdb1c514f0a4eb6b70d99121d663877Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0b24c905b9e648d8a5074c6e8579b58fAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* PK_PRODUCTO - PK_PRODUCTOS */
    public function getFld030b7872cbd48e8a60b59f448cd61ffAttribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }
}
