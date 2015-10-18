using System;
using System.Web;
using System.IO;

/*
 * Uset this page to access any style sheet from the clinet side.
 * Use it like 
 <style type="text/css">
   
    @import url(/stylesheets/getstylesheet.aspx?name=PopupBox);
    
</style>
 */
namespace AlaskaAir.Web.UI.alaskaair
{
	/// <summary>
	/// Use this page to access any style sheet from the clinet side.
	/// </summary>
    public partial class GetStyleSheet : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            using (StringWriter writer = new StringWriter())
            {
                string requestedStyleSheet = Request.QueryString.Get("name");
                string messageNotFound = "Requested style sheet is not found.";

                Response.Clear();
                Response.ClearContent();
                Response.ClearHeaders();
                Response.ContentType = "text/css";
                Response.Cache.SetCacheability(HttpCacheability.NoCache);

                if (requestedStyleSheet == null || requestedStyleSheet.Length < 1)
                {
                    Response.Write(messageNotFound);
                }
                else
                {
                    if (requestedStyleSheet != null && requestedStyleSheet.Length > 1)
                    {
                        try
                        {
                            Server.Execute("/stylesheets/" + requestedStyleSheet + ".css", writer);
                            Response.Write(writer.ToString());
                        }
                        catch
                        {
                            Response.Write(messageNotFound);
                        }
                    }
                    else
                    {
                        Response.Write(messageNotFound);
                    }
                }
            }
        }
    }
}
