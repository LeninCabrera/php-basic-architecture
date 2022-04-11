<?php

namespace App\Models\Enums;

enum ProfileFields: string {
    const Id            = 'id';
    const Name          = 'name';
    const Category      = 'category';
    const CreatedBy     = 'created_by';
    const ModifiedBy    = 'modified_by';
    const Description   = 'description';
    const CreatedTime   = 'created_time';
    const DisplayLabel  = 'display_label';
    const ModifiedTime  = 'modified_time';
}