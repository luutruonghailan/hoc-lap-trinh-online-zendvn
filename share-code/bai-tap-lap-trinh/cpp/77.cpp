#include <iostream>
#include <sstream>
#include <unordered_map>
using namespace std;

void findLongestCourse(const string &inputName, const std::string &inputTime) {
    unordered_map<string, string> courseNameMap;
    unordered_map<string, int> courseTimeMap;

    istringstream nameStream(inputName);
    string namePair;
    while (getline(nameStream, namePair, ';')) {
        istringstream pairStream(namePair);
        string courseId, courseName;
        getline(pairStream, courseId, '=');
        getline(pairStream, courseName, '=');
        courseNameMap[courseId] = courseName;
    }

    istringstream timeStream(inputTime);
    string timePair;
    while (getline(timeStream, timePair, ';')) {
        istringstream pairStream(timePair);
        string courseId, courseTime;
        getline(pairStream, courseId, '=');
        getline(pairStream, courseTime, '=');
        courseTimeMap[courseId] = stoi(courseTime);
    }

    int longestTime = 0;
    string longestCourseId, longestCourseName;

    for (const auto &pair : courseTimeMap) {
        if (pair.second > longestTime) {
            longestTime = pair.second;
            longestCourseId = pair.first;
            if (courseNameMap.find(pair.first) != courseNameMap.end()) {
                longestCourseName = courseNameMap[pair.first];
            }
        }
    }

    cout << "Course Id: " << longestCourseId << " - Course Name: " << longestCourseName
              << " - Course Time: " << longestTime << endl;
}

int main() {
    // string inputName = "abw=java;def=android;nfv=php;";
    // string inputTime = "abw=20;nfv=40;def=90";
    string inputName = "abw=java;def=android;nfv=php;";
    string inputTime = "abw=9920;nfv=240;def=1990";

    findLongestCourse(inputName, inputTime);

    return 0;
}