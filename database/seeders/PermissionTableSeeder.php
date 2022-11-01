<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->truncate();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الصفحة الرئيسية';
        $createTasks->name_en = 'Main Page';
        $createTasks->slug = 'main-page';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الداش بورد';
        $createTasks->name_en = 'Dashboard';
        $createTasks->slug = 'dashboard';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم';
        $createTasks->name_en = 'Settings';
        $createTasks->slug = 'settings';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم -قائمة المستخدمين';
        $createTasks->name_en = 'Users';
        $createTasks->slug = 'users';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - المستخدمين';
        $createTasks->name_en = 'Control Panel - Users';
        $createTasks->slug = 'control-panel-users';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - إضافة المستخدمين';
        $createTasks->name_en = 'Control Panel - Add Users';
        $createTasks->slug = 'control-panel-add-users';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم -قائمة الشركات';
        $createTasks->name_en = 'Company';
        $createTasks->slug = 'Company';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - الشركات';
        $createTasks->name_en = 'Control Panel - Company';
        $createTasks->slug = 'control-panel-companies';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - إضافة الشركة';
        $createTasks->name_en = 'Control Panel - Add Company';
        $createTasks->slug = 'control-panel-add-companies';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم -قائمة الفروع';
        $createTasks->name_en = 'Branches';
        $createTasks->slug = 'Branches';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - الفروع';
        $createTasks->name_en = 'Control Panel - Branches';
        $createTasks->slug = 'control-panel-branches';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - إضافة الفروع';
        $createTasks->name_en = 'Control Panel - Add Branches';
        $createTasks->slug = 'control-panel-add-branches';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم -قائمة الموردين';
        $createTasks->name_en = 'Suppliers';
        $createTasks->slug = 'Suppliers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - الموردين';
        $createTasks->name_en = 'Control Panel - Suppliers';
        $createTasks->slug = 'control-panel-suppliers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - إضافة الموردين';
        $createTasks->name_en = 'Control Panel - Add Suppliers';
        $createTasks->slug = 'control-panel-add-suppliers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم -قائمة الماركات';
        $createTasks->name_en = 'Brands';
        $createTasks->slug = 'Brands';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - الماركات';
        $createTasks->name_en = 'Control Panel - Brands';
        $createTasks->slug = 'control-panel-brands';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - إضافة الماركات';
        $createTasks->name_en = 'Control Panel - Add Brands';
        $createTasks->slug = 'control-panel-add-brands';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم -قائمة العملات';
        $createTasks->name_en = 'Currencies';
        $createTasks->slug = 'Currencies';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - العملات';
        $createTasks->name_en = 'Control Panel - Currencies';
        $createTasks->slug = 'control-panel-currencies';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - إضافة العملات';
        $createTasks->name_en = 'Control Panel - Add Currencies';
        $createTasks->slug = 'control-panel-add-currencies';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم -قائمة المجموعات';
        $createTasks->name_en = 'Groups';
        $createTasks->slug = 'Groups';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - المجموعات';
        $createTasks->name_en = 'Control Panel - Groups';
        $createTasks->slug = 'control-panel-groups';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - إضافة المجموعات';
        $createTasks->name_en = 'Control Panel - Add Groups';
        $createTasks->slug = 'control-panel-add-groups';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - الصلاحيات';
        $createTasks->name_en = 'Control Panel - Permissions';
        $createTasks->slug = 'control-panel-permissions';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - قائمة الاعدادات العامة';
        $createTasks->name_en = 'General Settings';
        $createTasks->slug = 'General-Settings';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - الاعدادات العامة';
        $createTasks->name_en = 'Control Panel - General Settings';
        $createTasks->slug = 'control-panel-general-settings';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'لوحة التحكم - الاعدادات العامة';
        $createTasks->name_en = 'Control Panel - Add General Settings';
        $createTasks->slug = 'control-panel-general-add-settings';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون';
        $createTasks->name_en = 'Stock';
        $createTasks->slug = 'stock-header';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون -قائمة التصنيفات';
        $createTasks->name_en = 'Categories';
        $createTasks->slug = 'Categories';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - التصنيفات';
        $createTasks->name_en = 'Stock - Categories';
        $createTasks->slug = 'stock-categories';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - إضافة التصنيفات';
        $createTasks->name_en = 'Stock - Add Categories';
        $createTasks->slug = 'stock-add-categories';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - قائمة الوحدات';
        $createTasks->name_en = 'Units';
        $createTasks->slug = 'Units';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - الوحدات';
        $createTasks->name_en = 'Stock - Units';
        $createTasks->slug = 'stock-units';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - إضافة الوحدات';
        $createTasks->name_en = 'Stock - Add Units';
        $createTasks->slug = 'stock-add-units';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون -قائمة الاصناف';
        $createTasks->name_en = 'Items';
        $createTasks->slug = 'Items';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - الاصناف';
        $createTasks->name_en = 'Stock - Items';
        $createTasks->slug = 'stock-items';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - إضافة صنف';
        $createTasks->name_en = 'Stock - Add Items';
        $createTasks->slug = 'stock-add-items';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - تعديل كمية الصنف';
        $createTasks->name_en = 'Stock - Modify Item Quantity';
        $createTasks->slug = 'stock-modify-item-quantity';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - الاصناف المرسلة المعلقة';
        $createTasks->name_en = 'Stock - Pending Sent Items';
        $createTasks->slug = 'stock-pending-sent-items';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون -قائمة نقل الاصناف';
        $createTasks->name_en = 'Item Transfer';
        $createTasks->slug = 'item-transfer';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - نقل الاصناف';
        $createTasks->name_en = 'Stock - Item Transfer';
        $createTasks->slug = 'stock-item-transfer';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون -الاصناف الواردة';
        $createTasks->name_en = 'Stock - Items Received';
        $createTasks->slug = 'stock-item-received';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون -قائمة العروض';
        $createTasks->name_en = 'Item Offers';
        $createTasks->slug = 'item-Offers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - العروض';
        $createTasks->name_en = 'Stock - Offers';
        $createTasks->slug = 'stock-offers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - اضافة عرض';
        $createTasks->name_en = 'Stock - Add Offers';
        $createTasks->slug = 'stock-add-offer';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - اضافة خصم على المنتج';
        $createTasks->name_en = 'Stock - Add Item Discount';
        $createTasks->slug = 'stock-add-item-discount';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - العروض';
        $createTasks->name_en = 'فواتير الشراء';
        $createTasks->slug = 'purchase-invoice';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - فواتير الشراء';
        $createTasks->name_en = 'Stock - Purchasing Invoice';
        $createTasks->slug = 'stock-purchase-invoice';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - اضافة فاتورة شراء';
        $createTasks->name_en = 'Stock - Add Purchasing Invoice';
        $createTasks->slug = 'stock-add-purchase-invoice';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة - ارجاع منتجات للمورد';
        $createTasks->name_en = 'Return Items to Supplier';
        $createTasks->slug = 'return-item-to-supplier';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المخزون - ارجاع منتجات للمورد';
        $createTasks->name_en = 'Stock - Return Items to Supplier';
        $createTasks->slug = 'stock-return-item-to-supplier';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات';
        $createTasks->name_en = 'Accounting';
        $createTasks->slug = 'accounting-header';
        $createTasks->save();


        $createTasks = new Permission();
        $createTasks->name_ar = 'إدارة الحسابات';
        $createTasks->name_en = 'Accounting-management';
        $createTasks->slug = 'accounting-management';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - الحسابات';
        $createTasks->name_en = 'Accounting-accounting';
        $createTasks->slug = 'accounting-accounting';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - إضافة الحسابات';
        $createTasks->name_en = 'Accounting-add-accounting';
        $createTasks->slug = 'accounting-add-accounting';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - المعاملات الحسابية';
        $createTasks->name_en = 'Accounting-accounting-transaction';
        $createTasks->slug = 'accounting-accounting-transaction';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - عرض المعاملات الحسابية';
        $createTasks->name_en = 'Accounting-view-transaction';
        $createTasks->slug = 'accounting-view-transaction';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - إضافة المعاملات الحسابية';
        $createTasks->name_en = 'Accounting-add-transaction';
        $createTasks->slug = 'accounting-add-transaction';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - التحويل بين الحسابات';
        $createTasks->name_en = 'Accounting-transfer-between-accounts';
        $createTasks->slug = 'accounting-transfer-between-accounts';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - مجموعات العملاء';
        $createTasks->name_en = 'Accounting-customers-groups';
        $createTasks->slug = 'accounting-customers-groups';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - إستلام مبلغ من عميل';
        $createTasks->name_en = 'Accounting-received-amount-from-customer';
        $createTasks->slug = 'accounting-received-from-customer';
        $createTasks->save();


        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - مجموعات الموردين';
        $createTasks->name_en = 'Accounting-suppliers-groups';
        $createTasks->slug = 'accounting-suppliers-groups';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'الحسابات - دفع مبلغ إلي مورد';
        $createTasks->name_en = 'Accounting-pay-amount-to-supplier';
        $createTasks->slug = 'accounting-pay-for-supplier';
        $createTasks->save();


        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM';
        $createTasks->name_en = 'CRM';
        $createTasks->slug = 'crm-header';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM -  قائمة العملاء';
        $createTasks->name_en = 'crm-suppliers';
        $createTasks->slug = 'crm-suppliers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'العملاء';
        $createTasks->name_en = 'suppliers';
        $createTasks->slug = 'suppliers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - إضافة العملاء';
        $createTasks->name_en = 'crm-add-suppliers';
        $createTasks->slug = 'crm-add-suppliers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة مجموعات العملاء';
        $createTasks->name_en = 'suppliers-groups';
        $createTasks->slug = 'suppliers-groups';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - مجموعات العملاء';
        $createTasks->name_en = 'crm-suppliers-groups';
        $createTasks->slug = 'crm-suppliers-groups';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - إضافة مجموعات العملاء';
        $createTasks->name_en = 'crm-add-suppliers-groups';
        $createTasks->slug = 'crm-add-suppliers-groups';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة التصنيفات';
        $createTasks->name_en = 'categories';
        $createTasks->slug = 'categories';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - التصنيفات';
        $createTasks->name_en = 'crm-categories';
        $createTasks->slug = 'crm-categories';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - إضافة التصنيفات';
        $createTasks->name_en = 'crm-add-categories';
        $createTasks->slug = 'crm-add-categories';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة الحالات';
        $createTasks->name_en = 'status';
        $createTasks->slug = 'status';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - الحالات';
        $createTasks->name_en = 'crm-status';
        $createTasks->slug = 'crm-status';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - إضافة حالة';
        $createTasks->name_en = 'crm-add-status';
        $createTasks->slug = 'crm-add-status';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة تحويل الحالات';
        $createTasks->name_en = 'status-transfer-logic';
        $createTasks->slug = 'status-transfer-logic';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM -  تحويل الحالات';
        $createTasks->name_en = 'crm-status-transfer-logic';
        $createTasks->slug = 'crm-status-transfer-logic';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - إضافة تحويل الحالات';
        $createTasks->name_en = 'crm-add-status-transfer-logic';
        $createTasks->slug = 'crm-add-status-transfer-logic';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة التذاكر';
        $createTasks->name_en = 'tickets';
        $createTasks->slug = 'tickets';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM -  تذاكر';
        $createTasks->name_en = 'crm-tickets';
        $createTasks->slug = 'crm-tickets';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - إضافة تذكرة';
        $createTasks->name_en = 'crm-add-tickets';
        $createTasks->slug = 'crm-add-tickets';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'التصنيع';
        $createTasks->name_en = 'manufacturing';
        $createTasks->slug = 'manufacturing-header';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة التصنيع';
        $createTasks->name_en = 'manufacturing-boms';
        $createTasks->slug = 'manufacturing-boms';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'التصنيع - المواد المصنعة';
        $createTasks->name_en = 'manufacturing-boms';
        $createTasks->slug = 'boms';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'التصنيع - إضافة المواد المصنعة';
        $createTasks->name_en = 'manufacturing-add-boms';
        $createTasks->slug = 'add-boms';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة - مراكز التكلفة';
        $createTasks->name_en = 'cost-center';
        $createTasks->slug = 'cost-center';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'التصنيع - عرض مراكز التكلفة';
        $createTasks->name_en = 'manufacturing-cost-center';
        $createTasks->slug = 'manufacturing-cost-center';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'التصنيع - إضافة مراكز التكلفة';
        $createTasks->name_en = 'manufacturing-add-cost-center';
        $createTasks->slug = 'add-cost-center';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة - أوامر التصنيع';
        $createTasks->name_en = 'work-order';
        $createTasks->slug = 'work-order';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'التصنيع - عرض أوامر التصنيع';
        $createTasks->name_en = 'manufacturing-work-order';
        $createTasks->slug = 'manufacturing-work-order';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'التصنيع - إضافة أوامر التصنيع';
        $createTasks->name_en = 'manufacturing-add-work-order';
        $createTasks->slug = 'add-work-order';
        $createTasks->save();

        // sales

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات';
        $createTasks->name_en = 'sales';
        $createTasks->slug = 'sales-header';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة - فواتير البيع';
        $createTasks->name_en = 'sales-invoice';
        $createTasks->slug = 'sales-invoice';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - فواتير البيع';
        $createTasks->name_en = 'sales-sales-invoice';
        $createTasks->slug = 'view-sales-invoice';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - إضافة فواتير البيع';
        $createTasks->name_en = 'sales-add-sales-invoice';
        $createTasks->slug = 'add-sales-invoice';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'POS المبيعات - إضافة فواتير البيع';
        $createTasks->name_en = 'sales-add-sales-invoice-POS';
        $createTasks->slug = 'add-sales-invoice-POS';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات -قائمة منتجات مرتجعة من العملاء';
        $createTasks->name_en = 'sales-return-item-from-customers';
        $createTasks->slug = 'sales-return-item-from-customers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - منتجات مرتجعة من العملاء';
        $createTasks->name_en = 'return-item-from-customers';
        $createTasks->slug = 'return-item-from-customers';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - إضافة إرتجاع منتج من عميل';
        $createTasks->name_en = 'sales-add-return-item-from-customer';
        $createTasks->slug = 'add-return-item-from-customer';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات -قائمة عرض أسعار المبيعات';
        $createTasks->name_en = 'sales-quota';
        $createTasks->slug = 'sales-quota';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - عرض أسعار المبيعات';
        $createTasks->name_en = 'sales-sales-quota';
        $createTasks->slug = 'view-sales-quota';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - إضافة عرض أسعار المبيعات';
        $createTasks->name_en = 'sales-add-sales-quota';
        $createTasks->slug = 'add-sales-quota';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'التقارير';
        $createTasks->name_en = 'reports';
        $createTasks->slug = 'reports-header';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة - متدوبين المبيعات';
        $createTasks->name_en = 'sales-rep';
        $createTasks->slug = 'sales-rep';
        $createTasks->save();


        $createTasks = new Permission();
        $createTasks->name_ar = 'تقرير متدوبين المبيعات';
        $createTasks->name_en = 'report-sales-rep';
        $createTasks->slug = 'sales-rep-report';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'تقرير تعاملات متدوبين المبيعات';
        $createTasks->name_en = 'report-sales-rep-transaction';
        $createTasks->slug = 'sales-rep-transaction-report';
        $createTasks->save();




        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة - المنتجات';
        $createTasks->name_en = 'items';
        $createTasks->slug = 'items';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المنتجات - المنتجات النافذة من المخزن';
        $createTasks->name_en = 'items-out-of-stock-reports';
        $createTasks->slug = 'out-of-stock-items-reports';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المنتجات - المنتجات المتاحة';
        $createTasks->name_en = 'items-available-items-reports';
        $createTasks->slug = 'available-items-reports';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المنتجات - كارت الصنف';
        $createTasks->name_en = 'items-item-card-reports';
        $createTasks->slug = 'item-card-reports';
        $createTasks->save();



        $createTasks = new Permission();
        $createTasks->name_ar = 'قائمة - المبيعات';
        $createTasks->name_en = 'sales';
        $createTasks->slug = 'sales';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - أكثر الأوقات مبيعا';
        $createTasks->name_en = 'sales-most-sales-times-reports';
        $createTasks->slug = 'most-sales-times-reports';
        $createTasks->save();



        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - تعديل سعر المنتج فى فاتورة المبيعات';
        $createTasks->name_en = 'Sales - Modify Item Price in sales invoice';
        $createTasks->slug = 'modify-sales-price-in-sales-invoice';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - تعديل الخصم فى فاتورة المبيعات';
        $createTasks->name_en = 'Sales - Modify discount in sales invoice';
        $createTasks->slug = 'modify-discount-in-sales-invoice';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'المبيعات - تعديل الضريبة فى فاتورة المبيعات';
        $createTasks->name_en = 'Sales - Modify tax in sales invoice';
        $createTasks->slug = 'modify-tax-in-sales-invoice';
        $createTasks->save();

        $createTasks = new Permission();
        $createTasks->name_ar = 'CRM - رؤية قائمة العملاء كاملة';
        $createTasks->name_en = 'CRM - View All Customers List';
        $createTasks->slug = 'crm-view-all-customer-list';
        $createTasks->save();
    }
}
