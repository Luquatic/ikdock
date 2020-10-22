import React from "react";
import "./VideoPlayer.css";
const VideoPlayer = props => {
  return (
    <div>
      <video key={props.video} className="videoPlayer" controls>
        <source src={props.video || ""} type="video/mp4" />
      </video>
    </div>
  );
};

export default VideoPlayer;
