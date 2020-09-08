using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Laba1._1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        Model1 db = new Model1();

        //List<Products> prod = db.Products.ToList();
        
        private void Form1_Load(object sender, EventArgs e)
        {

            suppliersBindingSource.DataSource = db.Suppliers.ToList();
           productsBindingSource1.DataSource = db.Products.ToList();
            

        }

        private void button1_Click(object sender, EventArgs e)
        {
            List<Products> prod = (List<Products>)productsBindingSource1.List;
            prod.Sort(SortPotsene);
            productsBindingSource1.DataSource = null;
            productsBindingSource1.DataSource = prod;
        }
        int SortPotsene(Products prd1, Products prd2)
        {
            if (prd1.UnitPrice < prd2.UnitPrice)
                return -1;
            else if (prd1.UnitPrice == prd2.UnitPrice)
                return 0;
            else
                return 1;
        
        }

        private void button2_Click(object sender, EventArgs e)
        {
            
            productsBindingSource1.DataSource = null;
            productsBindingSource1.DataSource = db.Products.ToList<Products>();

        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (comboBox1.SelectedValue == null) return;
            
            int n = (int)comboBox1.SelectedValue;
            
            var postav = db.Products.Where(x => x.SupplierID == n);
            
            productsBindingSource1.DataSource = postav.ToList();

        }
    }
}
