#include <iostream>
#include <sstream>
#include <string>
using namespace std;


int main() {
   
    string str1 = "php/12";
    istringstream stream(str1);
    string courseName, timeStr;

    int maxTime = 0;
    string longestCourse;

    while (getline(stream, courseName, '/')) {
        if (!getline(stream, timeStr, '/')) {
            break; 
        }
        
        int time = stoi(timeStr);
        if (time > maxTime) {
            maxTime = time;
            longestCourse = courseName;
        }
    }

    cout << longestCourse << ": " << maxTime << endl;

    return 0;
}
