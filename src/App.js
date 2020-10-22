import React from "react";
import SearchBar from "./SearchBar";
import VideoPlayer from "./VideoPlayer";
import axios from "axios";

import "./App.css";
class App extends React.Component {
  state = { video: "" };

  componentDidMount = () => {
    this.makeApiCall(2019);
  };
  makeApiCall = searchTerm => {
    const BASE_URL = "http://localhost:8000/api/winners/";
    axios.get(BASE_URL + searchTerm).then(res => {
      console.log(res);
      this.setState({
        video: "http://localhost:8000" + res.data.winner.video
      });
    });
  };
  render() {
    return (
      <div className="container">
        <SearchBar onSubmit={this.makeApiCall} />
        <VideoPlayer video={this.state.video} />
      </div>
    );
  }
}

export default App;
