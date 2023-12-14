#include <iostream>
using namespace std;
int main()
{
    // Kiểm tra tuổi có phù hợp để xem phim 
    // >15
    int yourAge             = 16;
    string result           = "Bạn KHÔNG được xem phim ";
    const int LIMIT_AGE     = 15;
    const string FILM_NAME  = "Thế giới lập trình";

    if (yourAge > LIMIT_AGE)
    {
        result = "Bạn được xem phim ";
    }
    cout << result << FILM_NAME;
    
}