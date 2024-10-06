import java.io.IOException;
import java.util.Enumeration;
import jakarta.servlet.ServletConfig;
import jakarta.servlet.ServletException;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;

public class ValidServ extends HttpServlet {
    private static final long serialVersionUID = 1L;

    public void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        // Get username and password from the form
        String un = request.getParameter("txtuser");
        String pw = request.getParameter("txtpass");

        // Get servlet config to retrieve initialization parameters
        ServletConfig config = getServletConfig();
        boolean flag = false;

        // Iterate through all initialization parameters
        Enumeration<String> initparams = config.getInitParameterNames();
        while (initparams.hasMoreElements()) {
            String name = initparams.nextElement();
            String pass = config.getInitParameter(name);

            // Check if the username and password match
            if (un.equals(name) && pw.equals(pass)) {
                flag = true;
                break;
            }
        }

        // Send response based on validation result
        if (flag) {
            response.getWriter().print("Valid user!");
        } else {
            response.getWriter().print("Invalid user!");
        }
    }
}
