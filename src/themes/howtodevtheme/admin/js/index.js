import React from 'react';
import {createRoot} from "react-dom";
import Settings from "./pages/Settings.jsx";

const domNode = document.getElementById('htd-settings');
const root = createRoot(domNode);

root.render(<Settings />);