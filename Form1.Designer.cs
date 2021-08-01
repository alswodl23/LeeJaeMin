
namespace myNote
{
    partial class Form1
    {
        /// <summary>
        /// 필수 디자이너 변수입니다.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// 사용 중인 모든 리소스를 정리합니다.
        /// </summary>
        /// <param name="disposing">관리되는 리소스를 삭제해야 하면 true이고, 그렇지 않으면 false입니다.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form 디자이너에서 생성한 코드

        /// <summary>
        /// 디자이너 지원에 필요한 메서드입니다. 
        /// 이 메서드의 내용을 코드 편집기로 수정하지 마세요.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.rtbMemo = new System.Windows.Forms.RichTextBox();
            this.openFileDialog1 = new System.Windows.Forms.OpenFileDialog();
            this.toolStrip = new System.Windows.Forms.ToolStrip();
            this.tsbAll = new System.Windows.Forms.ToolStripButton();
            this.tsbAdd = new System.Windows.Forms.ToolStripButton();
            this.txtMessage = new System.Windows.Forms.TextBox();
            this.btnInput = new System.Windows.Forms.Button();
            this.domainUpDown = new System.Windows.Forms.DomainUpDown();
            this.plAdd = new System.Windows.Forms.Panel();
            this.label1 = new System.Windows.Forms.Label();
            this.btnNewMemoCancel = new System.Windows.Forms.Button();
            this.btnNewMemoAdd = new System.Windows.Forms.Button();
            this.txtMemoName = new System.Windows.Forms.TextBox();
            this.toolStrip.SuspendLayout();
            this.plAdd.SuspendLayout();
            this.SuspendLayout();
            // 
            // rtbMemo
            // 
            this.rtbMemo.BackColor = System.Drawing.Color.White;
            this.rtbMemo.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.rtbMemo.CausesValidation = false;
            this.rtbMemo.EnableAutoDragDrop = true;
            this.rtbMemo.ForeColor = System.Drawing.Color.Black;
            this.rtbMemo.Location = new System.Drawing.Point(0, 25);
            this.rtbMemo.Name = "rtbMemo";
            this.rtbMemo.ReadOnly = true;
            this.rtbMemo.Size = new System.Drawing.Size(356, 331);
            this.rtbMemo.TabIndex = 0;
            this.rtbMemo.TabStop = false;
            this.rtbMemo.Text = "";
            // 
            // openFileDialog1
            // 
            this.openFileDialog1.FileName = "openFileDialog";
            // 
            // toolStrip
            // 
            this.toolStrip.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.tsbAll,
            this.tsbAdd});
            this.toolStrip.Location = new System.Drawing.Point(0, 0);
            this.toolStrip.Name = "toolStrip";
            this.toolStrip.Size = new System.Drawing.Size(356, 25);
            this.toolStrip.TabIndex = 5;
            this.toolStrip.Text = "toolStrip1";
            // 
            // tsbAll
            // 
            this.tsbAll.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Text;
            this.tsbAll.Image = ((System.Drawing.Image)(resources.GetObject("tsbAll.Image")));
            this.tsbAll.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.tsbAll.Name = "tsbAll";
            this.tsbAll.Size = new System.Drawing.Size(35, 22);
            this.tsbAll.Text = "전체";
            this.tsbAll.Click += new System.EventHandler(this.tsbAll_Click);
            // 
            // tsbAdd
            // 
            this.tsbAdd.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Text;
            this.tsbAdd.Image = ((System.Drawing.Image)(resources.GetObject("tsbAdd.Image")));
            this.tsbAdd.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.tsbAdd.Name = "tsbAdd";
            this.tsbAdd.Size = new System.Drawing.Size(23, 22);
            this.tsbAdd.Text = "+";
            this.tsbAdd.Click += new System.EventHandler(this.tsbAdd_Click);
            // 
            // txtMessage
            // 
            this.txtMessage.Location = new System.Drawing.Point(12, 372);
            this.txtMessage.Multiline = true;
            this.txtMessage.Name = "txtMessage";
            this.txtMessage.Size = new System.Drawing.Size(236, 55);
            this.txtMessage.TabIndex = 2;
            // 
            // btnInput
            // 
            this.btnInput.Location = new System.Drawing.Point(254, 371);
            this.btnInput.Name = "btnInput";
            this.btnInput.Size = new System.Drawing.Size(95, 23);
            this.btnInput.TabIndex = 3;
            this.btnInput.Text = "입력";
            this.btnInput.UseVisualStyleBackColor = true;
            this.btnInput.Click += new System.EventHandler(this.btnInput_Click);
            // 
            // domainUpDown
            // 
            this.domainUpDown.Items.Add("전체");
            this.domainUpDown.Location = new System.Drawing.Point(254, 405);
            this.domainUpDown.Name = "domainUpDown";
            this.domainUpDown.ReadOnly = true;
            this.domainUpDown.Size = new System.Drawing.Size(95, 21);
            this.domainUpDown.TabIndex = 5;
            // 
            // plAdd
            // 
            this.plAdd.Controls.Add(this.label1);
            this.plAdd.Controls.Add(this.btnNewMemoCancel);
            this.plAdd.Controls.Add(this.btnNewMemoAdd);
            this.plAdd.Controls.Add(this.txtMemoName);
            this.plAdd.Enabled = false;
            this.plAdd.Location = new System.Drawing.Point(41, 132);
            this.plAdd.Name = "plAdd";
            this.plAdd.Size = new System.Drawing.Size(271, 120);
            this.plAdd.TabIndex = 6;
            this.plAdd.Visible = false;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(28, 25);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(77, 12);
            this.label1.TabIndex = 7;
            this.label1.Text = "메모장 이름 :";
            // 
            // btnNewMemoCancel
            // 
            this.btnNewMemoCancel.Location = new System.Drawing.Point(155, 67);
            this.btnNewMemoCancel.Name = "btnNewMemoCancel";
            this.btnNewMemoCancel.Size = new System.Drawing.Size(91, 26);
            this.btnNewMemoCancel.TabIndex = 6;
            this.btnNewMemoCancel.Text = "취소";
            this.btnNewMemoCancel.UseVisualStyleBackColor = true;
            this.btnNewMemoCancel.Click += new System.EventHandler(this.btnNewMemoCancel_Click);
            // 
            // btnNewMemoAdd
            // 
            this.btnNewMemoAdd.Location = new System.Drawing.Point(30, 67);
            this.btnNewMemoAdd.Name = "btnNewMemoAdd";
            this.btnNewMemoAdd.Size = new System.Drawing.Size(91, 26);
            this.btnNewMemoAdd.TabIndex = 5;
            this.btnNewMemoAdd.Text = "추가";
            this.btnNewMemoAdd.UseVisualStyleBackColor = true;
            this.btnNewMemoAdd.Click += new System.EventHandler(this.btnNewMemoAdd_Click);
            // 
            // txtMemoName
            // 
            this.txtMemoName.Location = new System.Drawing.Point(111, 21);
            this.txtMemoName.Name = "txtMemoName";
            this.txtMemoName.Size = new System.Drawing.Size(135, 21);
            this.txtMemoName.TabIndex = 2;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 12F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(356, 439);
            this.Controls.Add(this.plAdd);
            this.Controls.Add(this.domainUpDown);
            this.Controls.Add(this.btnInput);
            this.Controls.Add(this.txtMessage);
            this.Controls.Add(this.toolStrip);
            this.Controls.Add(this.rtbMemo);
            this.Name = "Form1";
            this.Text = "나와 메모장";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.toolStrip.ResumeLayout(false);
            this.toolStrip.PerformLayout();
            this.plAdd.ResumeLayout(false);
            this.plAdd.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.RichTextBox rtbMemo;
        private System.Windows.Forms.OpenFileDialog openFileDialog1;
        private System.Windows.Forms.ToolStrip toolStrip;
        private System.Windows.Forms.ToolStripButton tsbAll;
        private System.Windows.Forms.ToolStripButton tsbAdd;
        private System.Windows.Forms.TextBox txtMessage;
        private System.Windows.Forms.Button btnInput;
        private System.Windows.Forms.DomainUpDown domainUpDown;
        private System.Windows.Forms.Panel plAdd;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button btnNewMemoCancel;
        private System.Windows.Forms.Button btnNewMemoAdd;
        private System.Windows.Forms.TextBox txtMemoName;
    }
}

