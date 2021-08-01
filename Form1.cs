using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace myNote
{
    public partial class Form1 : Form
    {
        int index = 0;
        RichTextBox rtbFlashMemo = new RichTextBox();//실시간 정보 이동용
        RichTextBox rtbAll = new RichTextBox();//전체 카테고리
        string[] rtbMemory;

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            domainUpDown.SelectedIndex = 0;
        }

        private void plAdd_Close()
        {
            txtMemoName.Clear();
            plAdd.Enabled = false;
            plAdd.Visible = false;
            txtMessage.Enabled = true;
        }

        private void toolStripItems_Click(object sender, EventArgs e)
        {
            ToolStripItem item = (ToolStripItem)sender;
            rtbMemo.Clear();

            for (int i = 0; i < toolStrip.Items.Count; i++)
            {
                if (item.Text == toolStrip.Items[i].Text)
                {
                    rtbMemo.Text = rtbMemory[i - 1];
                }
            }            
        }

        private void btnInput_Click(object sender, EventArgs e)
        {
            try
            {
                string str = this.txtMessage.Text;
                string dt = Convert.ToString(DateTime.Now.Year) + "."
                    + Convert.ToString(DateTime.Now.Month) + "."
                    + Convert.ToString(DateTime.Now.Day) + " ["
                    + Convert.ToString(DateTime.Now.Hour) + ":"
                    + Convert.ToString(DateTime.Now.Minute) + "]";

                rtbFlashMemo.AppendText(str + "\r\n");
                rtbFlashMemo.AppendText(@"<" + dt + @">" + "\r\n");


                if (domainUpDown.SelectedIndex > 0)
                {
                   rtbMemory[domainUpDown.SelectedIndex - 1] += rtbFlashMemo.Text;
                }

                rtbAll.Text += rtbFlashMemo.Text;
                rtbMemo.Text += rtbFlashMemo.Text;
                rtbFlashMemo.Clear();
            }
            catch 
            {
                MessageBox.Show("텍스트 입력 오류.", "오류", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void tsbAdd_Click(object sender, EventArgs e)
        {
            plAdd.Enabled = true;
            plAdd.Visible = true;
            txtMessage.Enabled = false;
            txtMemoName.Clear();
            txtMemoName.Focus();
        }

        private void btnNewMemoAdd_Click(object sender, EventArgs e)
        {
            

            try
            {
                if (txtMemoName.Text != "")
                {
                    ToolStripItem ti = toolStrip.Items.Add(txtMemoName.Text);

                    toolStrip.Items.Insert(toolStrip.Items.Count - 2, ti);
                    toolStrip.Items[toolStrip.Items.Count - 2].Click += toolStripItems_Click;
                    domainUpDown.Items.Add(txtMemoName.Text);
                    if (index == 0)
                    {
                        rtbMemory = new string[index + 10];
                    }
                    else if (index > 9)
                    {
                        string[] rtbFlashMemory = new string[index + 10];
                        //for (int i = 0; i < index + 10; i++)
                        //{
                        //    rtbFlashMemory = rtbMemory;
                        //}
                        rtbFlashMemory = rtbMemory;
                        rtbMemory = new string[index + 10];
                        rtbMemory = rtbFlashMemory;
                    }
                    index++;
                    plAdd_Close();
                }
                else
                {
                    MessageBox.Show("메모장 이름을 입력해주세요.", "확인", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                    txtMemoName.Focus();
                }
            }
            catch 
            {
                MessageBox.Show("메모장 생성 오류.", "오류", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void btnNewMemoCancel_Click(object sender, EventArgs e)
        {
            plAdd_Close();
        }

        private void tsbAll_Click(object sender, EventArgs e)
        {
            rtbMemo.Clear();
            rtbMemo.Text = rtbAll.Text;
        }
    }
}
