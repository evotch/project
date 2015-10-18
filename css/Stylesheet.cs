using System;
using System.Web;
using System.IO;
using System.Configuration;

namespace AlaskaAir.Web.UI.alaskaair
{
	public abstract class Stylesheet : System.Web.UI.Page
	{
		private void Page_Load(object sender, EventArgs e)
		{
			using (StringWriter writer = new StringWriter())
			{
				Response.Clear();
				Response.ClearContent();
				Response.ClearHeaders();
				Response.ContentType = "text/css";

				string stylesheetName = GetStylesheetName();

				Response.Cache.SetCacheability(HttpCacheability.Private);
				Response.Cache.SetMaxAge(GetMaxAge(stylesheetName));
				Server.Execute("/stylesheets/" + stylesheetName + ".css", writer);

				Response.Write(writer.ToString());
			}
		}

        private TimeSpan GetMaxAge(string stylesheetName)
        {
            if (stylesheetName == "Screen")
                return new TimeSpan(0, 5, 0);
            else
                return new TimeSpan(0, 1440, 0);
        }

		protected abstract string GetStylesheetName();

		#region Web Form Designer generated code
		override protected void OnInit(EventArgs e)
		{
			//
			// CODEGEN: This call is required by the ASP.NET Web Form Designer.
			//
			InitializeComponent();
			base.OnInit(e);
		}
		
		/// <summary>
		/// Required method for Designer support - do not modify
		/// the contents of this method with the code editor.
		/// </summary>
		private void InitializeComponent()
		{    
			this.Load += new System.EventHandler(this.Page_Load);
		}
		#endregion
	}
}
