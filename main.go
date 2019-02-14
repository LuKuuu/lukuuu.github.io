package main

import (
	"encoding/json"
	"fmt"
	"html/template"
	"io/ioutil"
	"net/http"
)

func homepage(w http.ResponseWriter, r *http.Request) {
	t, err := template.ParseFiles("./index.html")
	if err != nil {
		panic(err)
		return
	}

	err = t.Execute(w, nil)
	if err != nil {
		fmt.Printf("%v", err)
	}
}

type config struct {
	Port string
}

func readPortFromFile() string {
	dat, err := ioutil.ReadFile("./config.json")
	if err != nil {
		panic(err)
	}

	conf := config{Port: ":80"}
	err = json.Unmarshal(dat, &conf)
	if err != nil {
		panic(err)
	}

	return conf.Port

}

func main() {
	fmt.Printf("starting...\n")
	port := readPortFromFile()
	http.HandleFunc("/", homepage)
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("static"))))
	err := http.ListenAndServe(port, nil)
	if err != nil {
		fmt.Printf("%v", err)
	}
}
